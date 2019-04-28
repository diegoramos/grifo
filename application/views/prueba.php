
    <script>



            var source = [
                {id: 1, name: "Aditya Purwa", level: "Admin"},
                {id: 2, name: "Aditya Avaga", level: "Manager"},
                {id: 101, name: "Aditya Myria", level: "User"},
                {id: 102, name: "Lucent Serentia", level: "LOD"},
                {id: 103, name: "Hayden Bapalthiel", level: "King"},
            ];

            function resetTabullet() {
                $("#table").tabullet({
                    data: source,
                    action: function (mode, data) {
                        console.dir(mode);
                        if (mode === 'save') {
                            source.push(data);
                        }
                        if (mode === 'edit') {
                            for (var i = 0; i < source.length; i++) {
                                if (source[i].id == data.id) {
                                    source[i] = data;
                                }
                            }
                        }
                        if(mode == 'delete'){
                            for (var i = 0; i < source.length; i++) {
                                if (source[i].id == data) {
                                    source.splice(i,1);
                                    break;
                                }
                            }
                        }
                        resetTabullet();
                    }
                });
            }

            resetTabullet();

    </script>

<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-sm-12">
                    <h1>
                        jQuery Tabullet Plugin Example
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-hover" id="table">
                        <thead>
                        <tr data-tabullet-map="id">
                            <th width="50" data-tabullet-map="_index" data-tabullet-readonly="true">
                                No
                            </th>
                            <th data-tabullet-map="name">Nama</th>
                            <th data-tabullet-map="level">Level</th>
                            <th width="50" data-tabullet-type="edit"></th>
                            <th width="50" data-tabullet-type="delete"></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->