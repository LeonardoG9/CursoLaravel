 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Vista</title>
 </head>
 <body>
     <h1>Hey que pedo cachorros {{"$name $apellido"}}</h1>
     <ul>

        @foreach ($posts as $post)
       
            <li>
                @if($loop->first)
                Primero:
                @else
                Medio: 
            @endif

            @if($loop->last)
                Ultimo:
                @else
                Medio:
            @endif
            
                {{$post}}</li>   
        @endforeach
     </ul>
 </body>
 </html>