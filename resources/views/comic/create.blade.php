<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h2>Inserisci il tuo fumetto</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                <form method="POST" action="">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="string" class="form-control" name="title" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero</label>
                        <input type="number" class="form-control" name="number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Anno di pubblicazione</label>
                        <input type="year" class="form-control" name="year">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Trama</label>
                        <input type="text" class="form-control" name="plot">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Copertina</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <button type="submit" class="btn btn-danger">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
    
    
    
</x-layout>