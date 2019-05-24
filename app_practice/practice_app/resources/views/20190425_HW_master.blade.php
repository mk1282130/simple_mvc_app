<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
    body {
    text-align: center;
    }
</style>
<body>
        <!-- <div class="row">
        <div class="col-sm-4" style="background-color: antiquewhite">.col-sm-4</div>
        <div class="col-sm-4" style="background-color:aquamarine">.col-sm-4</div>
        <div class="col-sm-4" style="background-color:cadetblue">.col-sm-4</div>
        </div> -->
    <header>
        @extends('20190425_HW_header')
    </header>

        <h2>This is Page of Home</h2>

            <div>
                <div class=sidebar>
                    @extends('20190425_HW_sidebar')
                </div>

                <div>
                    <main>
                        <p>user1</p>
                        <p>user2</p>
                        <p>user3</p>
                        <p>user4</p>
                    </main>
                </div>


                <div class=chatBox>

                </div>
            </div>
    <footer>
        @extends('20190425_HW_footer')
    </footer>

</body>
</html>