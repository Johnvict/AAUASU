<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use Illuminate\Http\Request;
use App\Chat;
use App\User;
use App\Conversation;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use App\Friend;

class chatController extends Controller
{
    public function getPChat()
    {
        $users = User::all();

        $allConvs = Conversation::all();
        $myChat = array();
        $myChatter = array();
        $chatters = array();
        foreach($allConvs as $each)
        {
            if((strtok($each->this_id, '-')) == Auth::user()->id)
            {
                $p =substr($each->this_id, strpos($each->this_id, '-')+1);
                array_push($myChat,   $each->this_id);
                array_push($myChatter,   substr($each->this_id, strpos($each->this_id, '-')+1));
               array_push($chatters, Profile::whereUserUserid($p)->get());
            }

            elseif(substr($each->this_id, strpos($each->this_id, '-')+1) == Auth::user()->MatricNumber){
                $p = strtok($each->this_id, '-');
                array_push($myChat,   $each->this_id);
                array_push($myChatter,   strtok($each->this_id, '-'));
                array_push($chatters, Profile::whereUserUserid($p)->get());
            }
        }


        $myChats = Conversation::whereThisId($myChat);
        return view('aauaites/chat/pchats')->with(['users' => $users, 'myChats' => $myChats, 'chatters' =>$chatters]);
    }
    public function getNewChat()
    {
        $users = User::all();
        return redirect ('/all-chats')->with('users', $users);
    }

    public function postStartConversation(Request $request)
    {
        $hisId = $request->input('hisId');
        $myId = $request->input('myId');
        $conversationId = $request->input('conversationId');


        $message = Chat::whereConversationId($conversationId)->first();
        $check = Conversation::whereThisId($conversationId)->get();
        $authUserProfile =  Profile::whereUserId(Auth::user()->id)->first();
        if(count($check)>0)
        {
            return redirect()->route('conversation')->with(['message' => $message, 'authUserProfile' => $authUserProfile]);
        }
    else
        {
            $conversation = new Conversation();
            $conversation -> this_id = $conversationId;
            $conversation -> hisId = $hisId;
            $conversation -> myId = $myId;
            $conversation -> save();
            $this->getConversation($conversationId);

            return redirect('conversation/'.$conversationId)->with(['message' => $message, 'authUserProfile' => $authUserProfile]);
            //return redirect('/conversation/{$conversationId}')->withMessage($message);
        }
    }

    public function getConversation($conversationId)
    {
        //dd($conversationId);
        $conversation = Chat::whereConversationId($conversationId)->get();

        $allConvs = Conversation::all();
        $user = array();
        foreach($allConvs as $each)
        {
            if((strtok($each->this_id, '-')) == Auth::user()->UserId)
            {
                $p =substr($each->this_id, strpos($each->this_id, '-')+1);
                array_push($user,   Profile::whereUserUserid($p)->get());
            }

            elseif(substr($each->this_id, strpos($each->this_id, '-')+1) == Auth::user()->UserId){
                $p = strtok($each->this_id, '-');
                array_push($user, Profile::whereUserUserid($p)->get());
            }
        }



        $authUserProfile =  Auth::user()->id;
        $message = Chat::whereConversationId($conversationId)->get();


        return view('aauaites/chat/thisChat')->with(['conversation' => $conversation, 'user' => $user,
            'authUserProfile' => $authUserProfile, 'message' => $message]);
    }

    public function postThisMessage(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);


        $body = $request->input('body');
        $conversationId = $request->input('conversationId');
        $myId = Auth::user()->id;

        $chat = new Chat();
        $chat -> body = $body;
        $chat -> conversation_id = $conversationId;
        $chat -> senderId = $myId;
        $chat -> save();

        return view('aauaites/chat/thisChat');//->with('message', $message);
    }


    //PUBLIC CHAT HERE
    public function getPublicChat(){
        return view('aauaites/chat/publicChat');
    }

   /*   FOR TESTING USING PUSHER
    *  public function send(){
        $message = "Hello";
        $user = User::find(Auth::id());
        event(new ChatEvent($message,$user));
    }*/

    public function send(request $request){
        return $request->all();

        //$user = User::find(Auth::id());
        $user = Auth::user();
        event(new ChatEvent($request->message,$user));
    }
}
