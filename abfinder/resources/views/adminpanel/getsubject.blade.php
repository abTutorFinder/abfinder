 @foreach($subjects as $subject)
                      	
        <tr>
            <td><img src="{{asset('')}}{{$subject->icon}}" width="40px"/><input type="hidden" id="img{{$subject->id}}" value="/{{$subject->icon}}"></td>
            <td>{{$subject->subjectname}}<input type="hidden" id="subject{{$subject->id}}" value="{{$subject->subjectname}}"></td>
            <td><a class="btn btn-outline-success" href="{{route('setgroup')}}">Set Group</a></td>
            <td>
              <button class="btn btn-outline-danger" onclick="deleteGroup('{{$subject->id}}')">Delete</button>
              <button class="btn btn-outline-info"  onclick="editGroup('{{$subject->id}}')">Edit</button>
            </td>
        </tr>
  	@endforeach
