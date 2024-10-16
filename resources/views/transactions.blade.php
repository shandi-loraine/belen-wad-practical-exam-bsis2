<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Page</title>
</head>
<body>
    <h1>TRANSACTIONS PAGE</h1>

    
    <form action="{{ route('createTransaction')}}" method="GET">
        @method('GET')
        <button type="submit"> Create New</button>
    </form>
    @foreach ($transactions as $transaction)

    <div> Transaction Name: {{$transaction->transaction_title}} </div>
    <div> Status: {{$transaction->status}} </div>
    <div> Amount: {{$transaction->total_amount}} </div>
    <div> Number: {{$transaction->transaction_number}} </div>

    <form action="{{ route('viewTransaction', ['id' => $transaction->id])}}" method="GET">
        <button type="submit"> View Transaction</button>
    </form>
    <hr>

    @endforeach
<!-- 
    'transaction_title',
        'description',
        'status',
        'total_amount',
        'transaction_number', -->
</body>
</html>