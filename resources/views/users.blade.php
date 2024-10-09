
@foreach ($name as $id => $val)
<table border="1">
 <tr>
 <td>{{$id}}</td>  
 <td>{{$val['name']}}</td>
 <td>{{$val['city']}}</td>
 <td><a href="{{route('data',$id)}}">show</a></td>
</tr>
</table>
@endforeach

@php
$name = array('x',5,3,4,5);
$city="";
@endphp

@foreach ($name as $n)
   @if($loop->depth)
    {!! "<h3 style='color:green;'>$n<h3>" !!}
    @else
        {{$n}}
    @endif 
@endforeach

@if(@empty($city))
{{"not filled"}}
@elseif($city=="surat")
{{"city is surat"}}
@else
{{$city}}
  
@endif

@includeWhen(@empty($city),'welcome')
@php
$mark="50";

@endphp 
@for ($i=0;$i<=10;$i++)
                
    {{$i}}
@endfor
@if(@empty($mark))
       {{"fail11"}}
       @elseif($mark="50")
       {{"Pass"}}
       @else
       {{"fail"}}
       
 @endif

