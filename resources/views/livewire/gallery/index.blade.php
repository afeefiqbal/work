@extends('layouts.app')

@section('content')
{{-- <div class="flex mb-4">
    <div class="w-full  h-12"></div>
  </div>

  <!-- Two columns -->
  <div class="container mx-auto px-4">
    <div class="flex mb-4">
        <div class="w-1/2  h-12">
        <form method="post" action="{{route('profile.store')}}" enctype="multipart/form-data" class="w-full max-w-lg">
            @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                      Upload File
                    </label>
                    <input name="image" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="Jane">
                  </div>
                </div>
                <button type="submit" class="flex-shrink-0  border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
                  Upload
                  </button>
                  {{-- @foreach ($mediaItems as $media)
                      {{$media}}
                  @endforeach --}}
              {{-- </form>

        </div>
      </div>
  </div> --}}

  <div class="container mx-auto">

    <div class="h-64 grid grid-rows-3 grid-flow-col gap-4">
        <div>
            <div class="container mx-auto px-4">
                <div class="flex mb-4">
                    <div class="w-1/2  h-12">
                    <form method="post" action="{{route('profile.store')}}" enctype="multipart/form-data" class="w-full max-w-lg">
                        @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                  Upload File
                                </label>
                                <input name="image" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="Jane">
                                <button type="submit" class="flex-shrink-0  border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
                                    Upload
                                    </button>
                            </div>

                            </div>

                              {{-- @foreach ($mediaItems as $media)
                                  {{$media}}
                              @endforeach --}}
                          </form>
                    </div>
                  </div>
              </div>
        </div>
        <div>


        </div>
      </div>
  </div>
  <!-- Four columns -->
  <div class="lg:container lg:mx-auto">
    <div class="grid grid-flow-col grid-rows-2 sm:grid-rows-3 md:grid-rows-4 lg:grid-rows-5 xl:grid-rows-6 ...">
        <div class="flex mb-4">
        @foreach ($mediaItems as $media)
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-1/2" src="{{$media->getUrl('card')}}" alt="Sunset in the mountains">
        <br>
        <img class="w-1/2" src="{{$media->getUrl('thumb')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
              <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
  </div>
@endsection
