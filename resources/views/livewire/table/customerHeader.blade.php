<thead>
    <tr>
        <th>
            <a wire:click.prevent="sortBy('nome')" role="button" href="#">
                Name
                @include('module._sort-icon', ['field' => 'nome'])
            </a>
        </th>
        <th>
            <a wire:click.prevent="sortBy('cognome')" role="button" href="#">
                Cognome
                @include('module._sort-icon', ['field' => 'cognome'])
            </a>
        </th>
        <th>
            <a wire:click.prevent="sortBy('residenza')" role="button" href="#">
                Residenza
                @include('module._sort-icon', ['field' => 'residenza'])
            </a>
        </th>
        <th>
            <a wire:click.prevent="sortBy('email')" role="button" href="#">
                Email
                @include('module._sort-icon', ['field' => 'email'])
            </a>
        </th>
        <th>
            <a wire:click.prevent="sortBy('telefono')" role="button" href="#">
                Telefono
                @include('module._sort-icon', ['field' => 'telefono'])
            </a>
        </th>
        <th>
            <a wire:click.prevent="sortBy('car')" role="button" href="#">
                Auto Acquistate
                @include('module._sort-icon', ['field' => 'car'])
            </a>
        </th>
    </tr>
</thead>