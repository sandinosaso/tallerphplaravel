<table class="table table-responsive" id="countries-table">
    <thead>
        <th>Code</th>
        <th>Name</th>
        <th>Img Flag</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($countries as $country)
        <tr>
            <td>{!! $country->code !!}</td>
            <td>{!! $country->name !!}</td>
            <td>{!! $country->img_flag !!}</td>
            <td>{!! $country->created_at !!}</td>
            <td>{!! $country->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['countries.destroy', $country->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('countries.show', [$country->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('countries.edit', [$country->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>