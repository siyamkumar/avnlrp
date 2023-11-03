<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="">
            {{ __('Jobs') }}
        </h2>
    </x-slot> --}}




    <div class="container-fluid">
        <h2 class="pt-3">
            {{ __('Unitwise Report') }}
        </h2>


<form action="" method="Get">

 <label for="fromperiod">From Date</label>
          <input type="date" id="fromperiod" name="fromperiod">
          <label for="toperiod">To Date</label>
          <input type="date" id="toperiod" name="toperiod">

</form>




        <table class="table table-hover table-responsive table-bordered">

            @php $count = 0; @endphp
            @foreach ($jobpostings as $j => $jobposting)
                @if ($count < 1)
                    @php $keys = $jobposting; @endphp
                    <tr>
                        <td rowspan="3" class="align-middle">#</td>
                        @foreach ($keys as $key => $item)
                            @if (is_object($item))
                                <th colspan="{{ count($item) * 3 }}" class="text-center">{{ $key }}

                                </th>
                            @else
                                <th rowspan="3" class="align-middle">{{ $key }}</th>
                            @endif
                        @endforeach
                    </tr>

                    <tr>

                        @foreach ($keys as $key => $item)
                            @if (is_object($item))
                                @foreach ($item->toArray() as $k => $i)
                                    {{-- @foreach ($i as $k => $i) --}}
                                    <th colspan="3" class="text-center">{{ $k }}</th>
                                    {{-- @endforeach --}}
                                @endforeach
                            @endif
                        @endforeach
                    </tr>

                    <tr>

                        @foreach ($keys as $key => $item)
                            @if (is_object($item))
                                @foreach ($item->toArray() as $k => $i)
                                    @foreach ($i as $k => $i)
                                        <th
                                            class="bg-opacity-10 
                                    @switch($k)
                                    @case('TOTAL') bg-info
                                    @break
                                        @case('SL') bg-success
                                        @break
                                    @case('RJ') bg-danger
                                    @break
                                    @endswitch
                                     ">
                                            {{ $k }}</th>
                                    @endforeach
                                @endforeach
                            @endif
                        @endforeach
                    </tr>
                @endif

                @php $count++ @endphp

                <tr>
                  
                        <td> {{ $j+1 }}</td>
                   
                    @foreach ($jobposting as $key => $item)
                        @if (is_object($item))
                            @foreach ($item as $i)
                                @foreach ($i as $k => $cat)
                                    <td
                                        class="bg-opacity-10 
                                    @switch($k)
                                    @case('TOTAL') bg-info fw-bold
                                    @break
                                        @case('SL') bg-success
                                        @break
                                    @case('RJ') bg-danger
                                    @break
                                    @endswitch">
                                        {{ $cat }} </td>
                                @endforeach
                            @endforeach
                        @else
                            <td> {{ $item }} </td>
                        @endif
                    @endforeach
                </tr>
            @endforeach

        </table>


    </div>

</x-app-layout>
