@can('Notification Log Delete')
    {!! Form::open(array('route' => array('user-notification-log.destroy', $user_notification_log_list->id), 'method' => 'delete','style' => 'display:inline')) !!}
    <button onclick="return confirm('Are You Sure ?')" class='btn btn-xs btn-danger' type="submit">Delete</button>
    {!! Form::close() !!}
@endcan