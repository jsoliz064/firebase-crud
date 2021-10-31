<body>
    

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>addd contactos
                            <a href="{{route('contactos.index')}}" class="btn btn-sm btn-primary float-end">atras</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('contactos.store')}}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label>nombre:</label>
                                <input type="text" name="nombre" class="form-control">
                            </div>    

                            <div class="form-group mb-3">
                                <label>apellido:</label>
                                <input type="text" name="apellido" class="form-control">
                            </div>  

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">guardar</button>
                            </div>  
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>