<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Todo App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' }
    </script>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <div class="navbar-item">
                <p class="control">
                    <a class="button is-primary" href="{{ url('/')}}">
                            <span class="icon">
                                <i class="fa fa-calendar"></i>
                            </span>
                        <span>Date</span>
                    </a>
                </p>
            </div>
        </div>
        <div class="navbar-menu">
            <div class="navbar">
                <div class="navbar-item" id="date_picker">
                    <datepicker v-model="date" input-class="input"></datepicker>
                </div>
             </div>
        </div>
    </nav>
    <div id='app' class="container">
        <task-list></task-list>
    </div>
<script src="js/app.js"></script>
</body>
</html>