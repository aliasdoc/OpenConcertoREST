<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Nouveau client</h4>

</div>
{{ Form::open(array('route' => 'clients.store')) }}
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-laptop"></i></span>
                    {{ Form::input('text', 'name', null, ['class' => 'form-control', 'placeholder' => 'Nom du client']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                    {{ Form::select('company_id',$companies, null, [
                    'class' => 'form-control select2 select2-hidden-accessible',
                    'style' => 'width: 100%;',
                    'tabindex' => '-1',
                    'aria-hidden' => 'true'] ) }}
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
    {{ Form::submit('Créer', array('class' => 'btn btn-primary')) }}
</div>
{{ Form::close() }}

<script type="text/javascript">
    $(document).ready(function() {
        $(".select2").select2();
    });
</script>