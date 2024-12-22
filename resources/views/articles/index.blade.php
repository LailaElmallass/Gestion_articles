<x-master title='home page'>
    <a href="{{route('articles.create')}}" class="btn btn-primary m-4">
        Add Article
    </a>
    <div class="table-responsive-sm">
        <table class="table table-striped table-borderless table-primary align-middle">
            <thead class="table-light">
                <tr>
                    <th>id</th>
                    <th>intitule</th>
                    <th>categorie</th>
                    <th>price</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($Articles as $Article)
                    <tr class="table-primary">
                        <td>{{$Article->id}}</td>
                        <td>{{$Article->intitule}}</td>
                        <td>{{$Article->categorie}}</td>
                        <td>{{$Article->price}}</td>
                        <td>
                            <a href="{{route('articles.show', $Article->id)}}">
                                <i class="fas fa-eye text-success"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$Articles->links()}}
    </div>
    

</x-master>