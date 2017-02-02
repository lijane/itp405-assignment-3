<html>
<style type="text/css">
    body {
        font-family: avenir;
        padding-left: 20px;
        padding-top: 20px;
        padding-right: 20px;
        }

    #title {
        color: #ff7c66;
    }

    .label {
        background-color: #f4f4f4;
        padding-left: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 20px;
        margin-bottom: 10px;
    }

</style>
    <head>
        <meta charset="utf-8">
        <title>Search: {{$search}}</title>
    </head>

    <body>
        <h1><div id="title"> You searched for: {{$search}} </div></h1>
        <hr>
        @foreach($dvds as $dvd)
        <div class="label">
            <h3>{{$dvd->title}}</h3>
            <p>Rating: {{$dvd->rating_name}}</p>
            <p>Genre: {{$dvd->genre_name}}</p>
        </div>
        @endforeach
    </body>
</html>
