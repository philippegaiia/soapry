@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Création Formule</div>

                <form action="{{ route('formulas.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="container">
                        <select name="formula[product_id]" id="product_id" class="form-control" >
                            <option value="" disabled>Sélectionner</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}" {{ $product->id == $formula->product_id ? 'selected' : ''  }}> {{ $product->code }}  - {{ $product->name}} {{$product->weight}}G</option>
                                @endforeach
                        </select>

                         <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" name="formula[code]" value="{{ old('code') ?? $product->code}}" class="form-control">
                            <small class="text-danger">  {{ $errors->first('code') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ old('name') ?? $product->name}}" class="form-control">
                            <small class="text-danger">  {{ $errors->first('name') }}</small>
                        </div>

                        <input type="text" name='formula[application_date]' class="form-control" value="{{ date('Y-m-d') }}" required />

                        <div class="row clearfix" style="margin-top:20px">
                            <div class="col-md-12">
                                <table class="table table-striped table-sm table-hover" id="tab_logic">
                                    <thead>
                                    <tr>
                                        <th class="text-center"> # </th>
                                        <th class="text-center"> Ingredient </th>
                                        <th class="text-center"> Quantité (%) </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr id='addr0'>
                                        <td>1</td>
                                        <td>
                                            <select name="ingredient[]" id="ingredient_id" class="form-control">
                                                <option value="" disabled>Select a Product</option>
                                                    @foreach ($ingredients as $ingredient)
                                                        <option value="{{ $ingredient->id }}" > {{ $ingredient->code }}  - {{ $ingredient->name}}</option>
                                                    @endforeach
                                            </select>
                                        </td>
                                        <td><input type="text" name='percent[]' placeholder='0.00' class="form-control qty" step="0" min="0"/></td>
                                    </tr>
                                    <tr id='addr1'></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <input type="button" id="add_row" class="btn btn-primary float-left" value="Add Row" />
                                <input type="button" id='delete_row' class="float-right btn btn-info" value="Delete Row" />
                            </div>
                        </div>
                        <div class="row clearfix" style="margin-top:20px">
                            <div class="col-md-12">
                                <div class="float-right col-md-6">
                                    <table class="table table-bordered table-hover" id="tab_logic_total">
                                        <tbody>
                                        <tr>
                                            <th class="text-center" width="50%">Total</th>
                                            <td class="text-center"><input type="number" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" readonly/></td>
                                        </tr>
                                        {{-- <tr>
                                            <th class="text-center">Tax</th>
                                            <td class="text-center"><div class="input-group mb-2 mb-sm-0">
                                                    <input type="number" class="form-control" id="tax" placeholder="0" name="invoice[tax_percent]">
                                                    <div class="input-group-addon">%</div>
                                                </div></td>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Tax Amount</th>
                                            <td class="text-center"><input type="number" name='tax_amount' id="tax_amount" placeholder='0.00' class="form-control" readonly/></td>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Grand Total</th>
                                            <td class="text-center"><input type="number" name='total_amount' id="total_amount" placeholder='0.00' class="form-control" readonly/></td>
                                        </tr> --}}
                                        </tbody>

                                    </table>
                                     <small>* Doit être égal à 100</small>
                                </div>
                            </div>
                        </div>
                    <input type="submit" class="btn btn-primary" value="Enregistrer Formule" />
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    $(document).ready(function(){
        var i=1;
        $("#add_row").click(function(){b=i-1;
            $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
            $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
            i++;
        });
        $("#delete_row").click(function(){
            if(i>1){
                $("#addr"+(i-1)).html('');
                i--;
            }
            calc();
        });

        $('#tab_logic tbody').on('keyup change',function(){
            calc();
        });
        $('#tax').on('keyup change',function(){
            calc_total();
        });


    });

    function calc()
    {
        $('#tab_logic tbody tr').each(function(i, element) {
            var html = $(this).html();
            if(html!='')
            {
                var qty = $(this).find('.qty').val();

                // $(this).find('.total').val(qty);

                calc_total();
            }
        });
    }

    function calc_total()
    {
        total=0;
        $('.qty').each(function() {
            total += parseFloat($(this).val());
        });
        $('#sub_total').val(total.toFixed(3));
    }

</script>
@stop
