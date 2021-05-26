<div>
    @foreach ($vacancies as $vacancy)
        <x-vacancy-card :vacancy="$vacancy" />
    @endforeach
</div>
