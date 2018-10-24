
<div class="dashboard__user__results">
      <div class ="box box-primary">
          <div id='table-responsive' style='min-height:700px;'>
            <table class="table table-bordered" id="table_availables" style='width:100% ! Important;'>
              <thead class="thead-dark">
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
    </div>
</div>
<script>
	function activate_list_availables() {
		$('#table_availables').DataTable({
			processing: true,
			serverSide: true,
			pageLenght: 10,
			language: {
				"url": '{!! asset('Themes/enfatheme/lang/en/latino.json') !!}'
				},
			 ajax: '{{ url('test') }}',
			columns:[
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
	}
  activate_list_availables()

</script>
