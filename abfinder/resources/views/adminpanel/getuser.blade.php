@foreach($users as $user)
		<tr>
			<td>{{$user->name}}<input type="hidden" id="uname{{$user->id}}" value="{{$user->name}}"></td>
            <td>{{$user->email}}<input type="hidden" id="uemail{{$user->id}}" value="{{$user->email}}"></td>
 			<td>***********<input type="hidden" id="upass{{$user->id}}" value="{{$user->password}}"></td>

            <td>
              <button class="btn btn-outline-danger" onclick="deleteGroup('{{$user->id}}')">Delete</button>
              <button class="btn btn-outline-info" onclick="editGroup('{{$user->id}}')">Edit</button>
            </td>
        </tr>
@endforeach