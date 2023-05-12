

@section('content')
    <h1>Résultats de recherche</h1>

    @if (count( $nomEtudiant) === 0)
        <p>Aucun article trouvé pour la recherche "{{ request('query') }}".</p>
    @else
        <ul>
            @foreach ($nomEtudiant as $isa)
                <li>
                    <a href="{{ route('recherche.be', $isa) }}">{{ $isa->nom }}</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
