             @csrf

             <div class="form-group row my-1">
                 <label for="Nome" class="col-sm-2 col-form-label">Nome:</label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" placeholder="Nome" name="name"
                         value="{{ $user->name ?? old('name') }}">
                 </div>
             </div>

             <div class="form-group row my-1">
                 <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Endereço de E-mail:</label>
                 <div class="col-sm-4">
                     <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                         placeholder="nome@exemplo.com" value="{{ $user->email ?? old('email') }}">
                 </div>
             </div>

             <div class="form-group row my-1">
                 <label for="inputPassword2" class="col-sm-2 col-form-label">Senha:</label>
                 <div class="col-sm-4">

                     <input type="password" class="form-control" id="inputPassword2" name="password"
                         placeholder="Senha">
                 </div>
             </div>
             <div class="d-flex offset-md-5">
                 <button type="submit" class="btn btn-outline-primary">Gravar</button>
             </div>
