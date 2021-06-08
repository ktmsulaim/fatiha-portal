@component('mail::message')
# Application #{{ $application->id }}

@component('mail::table')
|                            |                                                                            |
| ---------------------------| -------------------------------------------------------------------------- |
| Name:                      | {{ $application->name}}                                                    |
| Name of father:            | {{ $application->father_name}}                                             |
| Email:                     | {{ $application->email}}                                                   |
| Age:                       | {{ $application->age}}                                                     |
| Gender:                    | {{ $application->gender}}                                                  |
| Time preference:           | {{ $application->getTimePreference()}}                                     |
| Whatsapp:                  | {{ $application->whatsapp}}                                                |
| State:                     | {{ $application->state}}                                                   |
| Country:                   | {{ $application->country}}                                                 |

@endcomponent

Thanks,
<p>
    <small>IT Department, {{ config('app.name') }}</small>
</p>

@endcomponent

