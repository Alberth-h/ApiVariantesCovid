<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Variant</title>
</head>
<body>
    <h1>New Variant</h1>
    <form method="POST" action="{{route('variantes.store')}}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Lineage</label>
            <input type="text" name="lineage" id="lineage">
        </div>
        <div>
            <label>Common Countries</label>
            <textarea name="common_countries" id="common_countries" rows="5"></textarea>
        </div>
        <div>
            <label>Earliest Date</label>
            <input type="text" name="earliest_date" id="earliest_date">
        </div>
        <div>
            <label>Designated Number</label>
            <input type="text" name="designated_number" id="designated_number">
        </div>
        <div>
            <label>Assigned Number</label>
            <input type="text" name="assigned_number" id="assigned_number">
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" id="description" rows="5"></textarea>
        </div>
        <div>
            <label>WHO Name</label>
            <input type="text" name="who_name" id="who_name">
        </div>
        <div>
            <label>Evidence</label>
            <input type="file" name="evidence" id="evidence">
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
</body>
</html>