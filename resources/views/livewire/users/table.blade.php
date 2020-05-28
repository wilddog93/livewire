<div class="container">
    <div class="row mb-4 justify-content-between">
        <div class="col-md-6">
            <div class="form-inline">
                <span>Show per page: &nbsp;</span>
                <select wire:model="perPage" class="custom-select form-control">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <input wire:model="query" type="text" class="form-control" placeholder="Search people....">
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Occupation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)    
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->occupation }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row justify-content-between">
        <div class="col-md-6">
            {{ $users->links() }}
        </div>
        <div class="col-md-6">
            <div class="text-right">
                Show {{ $users->firstItem() }} to {{ $users->lastItem() }} from {{ $users->total() }}
            </div>
        </div>
    </div>
</div>
