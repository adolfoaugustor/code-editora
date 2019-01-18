<?php
/**
 * Created by PhpStorm.
 * User: matrix
 * Date: 17/01/2019
 * Time: 23:12
 */
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Lista de categorias</h3>
            <a href="{{route('categories.create')}}" class="btn btn-primary">Nova categoria</a>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>Ações</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection