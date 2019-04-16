@extends('layouts.foaadminmaster')  

<title>View Contestants</title>
@section('content')

    <!--<style>
        .add{
            border: 2px solid green;
            background: lightgreen;
            padding: 10px;
            width: 400px;
            border-radius: 0 0 10px 10px;
        }

        .topp {
            border: 2px solid green;
            background: white;
            padding: 10px;
            width: 400px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }

        .add .form-group {
            color: white;
            float: none;
        }

        .add .col-md-6, unfloat, row{
            float: none;
        }
    </style> -->

<h2>Delete Contestant</h2>
   
            {{ $contestant -> }}
            {{ $contestant -> Name }}
            {{ $contestant -> Nick }}
            {{ $contestant -> PhoneNumber }}
            {{ $contestant -> Faculty }}
            {{ $contestant -> Category }}
            {{ $contestant -> SubCategory }}
            
            
            <a href="/delete/{{ $contestant -> id }}" class="label label-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        
        </tbody>
        <tr>
    </table><br><br>