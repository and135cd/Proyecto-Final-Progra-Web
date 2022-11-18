<!-- @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        A simple danger alert—check it out! 
                        {{$error}}
                    </div>  
                @endforeach
            @endif -->
            
            <div>
                
                <div class="margen1">
                    @csrf
                    @if(session('status'))
                        <div class="alert alert-success" >
                            {{session('status')}}
                        </div>
                    @endif