@extends('layout.base')

@section('css')
    @parent
@stop

@section('js')
    @parent
@stop

@section('content')
    <div id="app">
        <div class="block">
            <div>
                <label>Display</label>
                <input type="checkbox" v-model="isCheck" />
            </div>

            <div v-if="isCheck">
                I'm here
            </div>
        </div>
    </div>
@stop