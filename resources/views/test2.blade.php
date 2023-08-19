<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arrayPoint = [2, 5, 7, 8, 9];
        $arrayAnimal = ['Meo', 'Cho', 'Ca', 'Gau', 'Huu cao co'];

        foreach($arrayAnimal as $key => $animal){
            $color = 'green';
            if(($key+1) % 2 === 0){
                $color = 'red';
            }
            echo ($key+1).".<span style='color:".$color.";'>$animal</span><br>"
        }
    ?>

        @php
            $arrayPoint = [2, 5, 7, 8, 9];
            $arrayAnimal = ['Meo', 'Cho', 'Ca', 'Gau']
        @endphp

        @foreach ($arrayAnimal as $ket => $animal)
            {{ $animal }}
            @if ($loop->even)
                {!! $loop->iteration . "<span style='color:red;'>" . $animal . '</span><br>' !!}
            @elseif($loop->odd)
                {!! $loop->iteration . "<span style='color:green;'>" . $animal . '</span><br>' !!}
            @endif
        @endforeach
</body>
</html>
