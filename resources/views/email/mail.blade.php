@extends('email.layout')
@section('mainsection')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-responsive table-striped">

                @foreach($data as $key=>$value)
                @if($key!="subject")
                <tr>
                    <td>
                        {{ ucwords(str_replace('_',' ',$key)) }}
                    </td>
                    <td>

                        @if(is_array($value))
                        <ul>
                            @foreach($value as $val)
                            <li>
                                {{ $val }}
                            </li>
                            @endforeach
                        </ul>
                        @else
                        {{$value}}
                        @endif
                    </td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
    </div>
</div>
@stop