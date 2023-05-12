@extends('layout.master')
@section('content')

    <body>
        <title>eHub | Search</title>
        <div class="container">
            <h1>Search Results</h1>
            <p>Showing results for: "XXXXXXXX"</p>

            <div class="search-results">
                <ul>
                    <li>
                        <h2><a href="posts">Result 1</a></h2>
                        <p>Description of result 1 goes here.</p>
                    </li>
                    <li>
                        <h2><a href="posts">Result 2</a></h2>
                        <p>Description of result 2 goes here.</p>
                    </li>
                    <li>
                        <h2><a href="posts">Result 3</a></h2>
                        <p>Description of result 3 goes here.</p>
                    </li>
                    <li>
                        <h2><a href="posts">Result 4</a></h2>
                        <p>Description of result 4 goes here.</p>
                    </li>
                    <li>
                        <h2><a href="posts">Result 5</a></h2>
                        <p>Description of result 5 goes here.</p>
                    </li>
                </ul>
            </div>

            <div class="pagination">
                <ul>
                    <li class="active"><a href="search">1</a></li>
                    <li><a href="results1">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>
        </div>

    </body>
@endsection
