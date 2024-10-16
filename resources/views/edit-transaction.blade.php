<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
    <form action="{{ route('updateTransaction', ['id' => $transaction->id ])}}" method="POST">
        @method("PUT")
        @csrf 

        <label form="transaction_title"> Transaction Title: </label>
        <input type="text" id="transaction_title" name="transaction_title" value="{{ $transaction->transaction_title}}" required>
        <br>
        <label form="description"> Description: </label>
        <input type="text" id="description" name="description" value="{{ $transaction->description}}" required>
        <br>
        <label form="status">Status: </label>
        <select id="status" name="status">
            <option value="successful"> successful</option>
            <option value="declined"> declined</option>
        </select>
        <br>
        <label form="total_amount"> Total Amount: </label>
        <input type="text" id="total_amount" name="total_amount" value="{{ $transaction->total_amount}}" required>
        <br>
        <label form="transaction_number"> Transaction Number: </label>
        <input type="text" id="transaction_number" name="transaction_number" value="{{ $transaction->transaction_number}}" required>
        <br>
        <button type="submit">Update Transaction Data</button>

    
    
</body>
</html>