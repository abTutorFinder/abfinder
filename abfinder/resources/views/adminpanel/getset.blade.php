@foreach($groups as $subs)
		<tr>
			<td>{{$subs->slug}}<input type="hidden" id="subs{{$subs->id}}" value="{{$subs->slug}}"></td>
            <td>{{$subs->title}}<input type="hidden" id="subs{{$subs->id}}" value="{{$subs->title}}"></td>

            <td>
              <button class="btn btn-outline-danger" onclick="deleteGroup('{{$subs->id}}')">Delete</button>
            </td>
        </tr>
@endforeach