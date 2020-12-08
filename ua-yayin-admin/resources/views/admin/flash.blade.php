@foreach($yeniler as $yeni)

    <li><a href="/yazi/{{$yeni->id}}/{{$yeni->slug}}">{{$yeni->baslik}}</a></li>
@endforeach

