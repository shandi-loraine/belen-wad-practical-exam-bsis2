<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction View</title>
</head>
<body>
    
    <div> Transaction Title: {{$transaction->transaction_title}} </div>
    <div> Status: {{$transaction->status}} </div>
    <div> Amount: {{$transaction->total_amount}} </div>
    <div> Number: {{$transaction->transaction_number}} </div>
    <hr>

    <form action="{{route('deleteTransaction', ['id' => $transaction->id])}}" method="POST" onsubmit="return confirm('Are you sure?')">
        @method("DELETE")
        @csrf 
        <button type="submit">Delete Transaction Data</button>
    </form>

    <form action="{{route('showAll')}}" method="GET">

        <button type="submit">Back Home</button>
    </form>

    <form action="{{ route('editTransaction', ['id' => $transaction->id])}}" method="GET">
        <button type="submit">Edit Transaction Data</button>
    </form>

</body>
</html>