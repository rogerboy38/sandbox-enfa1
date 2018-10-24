

<html lang="en">
<head>
    <title>Transporte Disponible</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
      <body>
         <div class="container">
               <h2>Transporte Disponible</h2>
            <table class="table table-bordered" id="table_availables" >
               <thead>
                 <tr>
                   <th scope="col">Id</th>
                   <th scope="col">Status</th>
                   <th scope="col">Tipo de carga</th>
                   <th scope="col">Carga</th>
                   <th scope="col">Tamaño de caja</th>
                   <th scope="col"></th>
                 </tr>
               </thead>
            </table>
         </div>
       <script>
         $(function() {
               $('#table_availables').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ url('index') }}',
               columns: [
                 { data: 'id', name: 'id' },
                 { data: 'status', name: 'status' },
                 { data: 'type', name: 'type' },
                 { data: 'origen', name: 'origen' },
                 { data: 'destino', name: 'destino' },
                 { data: 'max_size', name: 'max_size' },
                 { data: null, render: function (data, type, row) {
                   return "<a href= '{{ url('form_quote/') }}/"'+data.id+'" class= 'btn btn-xs btn-primary' >Cotizar</button>"}
                 }
                     ]
            });
         });
         </script>
   </body>
</html>
