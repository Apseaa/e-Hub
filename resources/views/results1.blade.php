@extends('layout.master')
@section('content')

    <body>
        <div class="container">
            <h1>Search Results</h1>
            <p>Showing results for: "XXXXXXXX"</p>

            <div class="search-results">
                <ul>
                    <li>
                        <h2><a href="posts">Result 6</a></h2>
                        <p>Description of result 6 goes here.</p>
                    </li>
                    <li>
                        <h2><a href="posts">Result 7</a></h2>
                        <p>Description of result 7 goes here.</p>
                    </li>
                    <li>
                        <h2><a href="posts">Result 8</a></h2>
                        <p>Description of result 8 goes here.</p>
                    </li>
                    <li>
                        <h2><a href="posts">Result 9</a></h2>
                        <p>Description of result 10 goes here.</p>
                    </li>
                    <li>
                        <h2><a href="posts">Result 10</a></h2>
                        <p>Description of result 10 goes here.</p>
                    </li>
                </ul>
            </div>

            <div class="pagination">
                <ul>
                    <li><a href="search">1</a></li>
                    <li class="active"><a href="results1">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>
        </div>
    </body>
@endsection
