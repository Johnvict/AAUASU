<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap.js"></script>
        <title>Our Class</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <form action=""><br/>
                        Item Name: <br/>
                        <input type="text" id="item_name"><br/>
                        Item Qantity: <br/>
                        <input type="text" id="item_quantity"><br/>
                        Item Unit Price: <br/>
                        <input type="text" id="item_u_price"><br/><br/>
                        <button type="button" name="addItem" id="addItem">Add Item</button>
                    </form>
                    <table cellspacing="0" cellpadding="0" width="600px">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Item Sold</th>
                            </tr>
                        </thead>
                        <tbody id="tbd">

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </body>

    @section('footerJS_all')
        <script>
            $(document).ready(function)
        </script>

</html>

