<div class="sidebar-module">
    <h4>Recent Added Users</h4>
    <ol class="list-unstyled">
        @foreach($archives as $archives)
            <li>
                <a href="#">{{$archives['email1']}}</a>

            </li>
        @endforeach
    </ol>
</div>
