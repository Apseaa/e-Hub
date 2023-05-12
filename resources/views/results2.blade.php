@extends('layout.master')
@section('content')

    <body>
        <div class="container">
            <h1>Search Results</h1>
            <p>Showing results for: "XXXXXXXX"</p>

            <div class="search-results">
                <ul>
                    <li>
                        <h2><a href="posts">Result 11</a></h2>
                        <p>Description of result 11 goes here.</p>
                    </li>
                    <li>
                        <h2><a href="posts">Result 12</a></h2>
                        <p>Description of result 12 goes here.</p>
                    </li>
                    <li>
                        <h2><a href="posts">Result 13</a></h2>
                        <p>Description of result 13 goes here.</p>
                    </li>
                    <li>
                        <h2><a href="posts">Result 14</a></h2>
                        <p>Description of result 14 goes here.</p>
                    </li>
                    <li>
                        <h2><a href="posts">Result 15</a></h2>
                        <p>Description of result 15 goes here.</p>
                    </li>
                </ul>
            </div>

            <div class="pagination">
                <ul>
                    <li><a href="search">1</a></li>
                    <li><a href="results1">2</a></li>
                    <li class="active"><a href="results2">3</a></li>
                </ul>
            </div>
        </div>
    </body>
@endsection
