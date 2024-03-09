@props(['paciente'])

<div class="course">
    <div class="course-preview">
        <img src="/assets/images/user4.png" alt="">
        <a href="{{ route('paciente.show', $paciente->id) }}" title='Ver ficha do paciente'>

            <img src="assets/images/show.png" alt="">

        </a>

    </div>
    <div class="course-info">


        <h2>{{ $paciente->nome }}</h2>
        
        <p class="email">{{ $paciente->telefone }}|{{ $paciente->email }}
        <p>

    </div>
</div>