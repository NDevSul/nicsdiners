<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include('admin.admincss')
    </head>

    <body>
        <div class="container-scroller">
            @include('admin.navbar')
            <div class="container">
<h1>Testimonies</h1>
                <table style="background: #ff8d02; border-radius: 15px; padding-right:50px; padding-left:50px" class="rounded-md">
                    <tr>
                        <th class="font-bold text-black-300" style="padding: 30px">Name</th>
                        <th class="font-bold text-black-300" style="padding: 30px">Comment</th>
                        <td class="font-bold text-black-300" style="padding:30px">Action</td>
                    </tr>


                    @foreach ($data as $data)
                    <tr align="center">
                        <td style="padding-bottom: 30px">{{$data->name}}</td>
                        <td style="padding-bottom: 30px; padding-right:30px">{{$data->comment}}</td>
                        <td><a href="{{ url('/deletetestimonies', $data->id) }}">Delete</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        @include('admin.adminscript')
    </body>

    </html>

</x-app-layout>