@extends('.template.app')

@section('content')
    <main class="border-t border-slate-200 lg:relative lg:mb-28 lg:ml-112 lg:border-t-0 xl:ml-120">
        @include('common.banner')

        <div class="relative">
            <div class="pb-12 pt-16 sm:pb-4 lg:pt-12">
                <div class="lg:px-8">
                    <div class="lg:max-w-4xl">
                        <div class="mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:px-0">
                            <div class="flex items-start justify-between">
                                <div class="w-1/2">
                                    <h1 class="text-2xl font-bold leading-7 text-slate-900">Episodes</h1>
                                </div>

                                @livewire('search-input')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divide-y divide-slate-100 sm:mt-4 lg:mt-8 lg:border-t lg:border-slate-100">

                    @if (!empty($videos))
                        @foreach ($videos as $i => $video)
                            <article aria-labelledby="episode-5-title" class="py-10 sm:py-12">
                                <div class="lg:px-8">
                                    <div class="lg:max-w-4xl">
                                        <div class="mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:px-0">
                                            <div class="flex flex-col items-start">
                                                <h2 id="episode-5-title" class="mt-2 text-lg font-bold text-slate-900">
                                                    <a href="/5">{{ $video->snippet->title }}</a>
                                                </h2>
                                                <time datetime="2022-02-24T00:00:00.000Z" class="order-first font-mono text-sm leading-7 text-slate-500">
                                                    {{ $video->snippet->publishedAt }}
                                                </time>
                                                <p class="mt-1 text-base leading-7 text-slate-700">
                                                    {{ $video->snippet->description }}
                                                </p>
                                                <div class="mt-4 flex items-center gap-4">
                                                    <button type="button" aria-label="Play episode 5: Bill Lumbergh"
                                                        class="flex items-center gap-x-3 text-sm font-bold leading-6 text-pink-500 hover:text-pink-700 active:text-pink-900">
                                                        <svg aria-hidden="true" viewBox="0 0 10 10"
                                                            class="h-2.5 w-2.5 fill-current">
                                                            <path
                                                                d="M8.25 4.567a.5.5 0 0 1 0 .866l-7.5 4.33A.5.5 0 0 1 0 9.33V.67A.5.5 0 0 1 .75.237l7.5 4.33Z">
                                                            </path>
                                                        </svg>
                                                        <span aria-hidden="true">Listen</span></button>
                                                    <span aria-hidden="true"
                                                        class="text-sm font-bold text-slate-400">/</span><a
                                                        class="flex items-center text-sm font-bold leading-6 text-pink-500 hover:text-pink-700 active:text-pink-900"
                                                        aria-label="Show notes for episode 5: Bill Lumbergh"
                                                        href="/5">Youtube Link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @else
                        <div>No results!</div>
                    @endif

                    <article aria-labelledby="episode-5-title" class="py-10 sm:py-12">
                        <div class="lg:px-8">
                            <div class="lg:max-w-4xl">
                                <div class="mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:px-0">
                                    <div class="flex flex-col items-start">
                                        <h2 id="episode-5-title" class="mt-2 text-lg font-bold text-slate-900">
                                            <a href="/5">5: Bill Lumbergh</a>
                                        </h2>
                                        <time datetime="2022-02-24T00:00:00.000Z"
                                            class="order-first font-mono text-sm leading-7 text-slate-500">February
                                            24, 2022
                                        </time>
                                        <p class="mt-1 text-base leading-7 text-slate-700">He’s going to need you to go
                                            ahead and come in on Saturday, but there’s a lot more to the story than you
                                            think.</p>
                                        <div class="mt-4 flex items-center gap-4">
                                            <button type="button" aria-label="Play episode 5: Bill Lumbergh"
                                                class="flex items-center gap-x-3 text-sm font-bold leading-6 text-pink-500 hover:text-pink-700 active:text-pink-900">
                                                <svg aria-hidden="true" viewBox="0 0 10 10"
                                                    class="h-2.5 w-2.5 fill-current">
                                                    <path
                                                        d="M8.25 4.567a.5.5 0 0 1 0 .866l-7.5 4.33A.5.5 0 0 1 0 9.33V.67A.5.5 0 0 1 .75.237l7.5 4.33Z">
                                                    </path>
                                                </svg>
                                                <span aria-hidden="true">Listen</span></button>
                                            <span aria-hidden="true" class="text-sm font-bold text-slate-400">/</span><a
                                                class="flex items-center text-sm font-bold leading-6 text-pink-500 hover:text-pink-700 active:text-pink-900"
                                                aria-label="Show notes for episode 5: Bill Lumbergh" href="/5">Show
                                                notes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article aria-labelledby="episode-4-title" class="py-10 sm:py-12">
                        <div class="lg:px-8">
                            <div class="lg:max-w-4xl">
                                <div class="mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:px-0">
                                    <div class="flex flex-col items-start">
                                        <h2 id="episode-4-title" class="mt-2 text-lg font-bold text-slate-900">
                                            <a href="/4">4: Shooter McGavin</a>
                                        </h2>
                                        <time datetime="2022-02-17T00:00:00.000Z"
                                            class="order-first font-mono text-sm leading-7 text-slate-500">February
                                            17, 2022
                                        </time>
                                        <p class="mt-1 text-base leading-7 text-slate-700">When golf-obsessed terrorists
                                            kidnapped his family and held them hostage in exchange for a Golden Jacket,
                                            Shooter had no choice but to win the tour at any cost.</p>
                                        <div class="mt-4 flex items-center gap-4">
                                            <button type="button" aria-label="Play episode 4: Shooter McGavin"
                                                class="flex items-center gap-x-3 text-sm font-bold leading-6 text-pink-500 hover:text-pink-700 active:text-pink-900">
                                                <svg aria-hidden="true" viewBox="0 0 10 10"
                                                    class="h-2.5 w-2.5 fill-current">
                                                    <path
                                                        d="M8.25 4.567a.5.5 0 0 1 0 .866l-7.5 4.33A.5.5 0 0 1 0 9.33V.67A.5.5 0 0 1 .75.237l7.5 4.33Z">
                                                    </path>
                                                </svg>
                                                <span aria-hidden="true">Listen</span></button>
                                            <span aria-hidden="true" class="text-sm font-bold text-slate-400">/</span><a
                                                class="flex items-center text-sm font-bold leading-6 text-pink-500 hover:text-pink-700 active:text-pink-900"
                                                aria-label="Show notes for episode 4: Shooter McGavin" href="/4">Show
                                                notes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article aria-labelledby="episode-3-title" class="py-10 sm:py-12">
                        <div class="lg:px-8">
                            <div class="lg:max-w-4xl">
                                <div class="mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:px-0">
                                    <div class="flex flex-col items-start">
                                        <h2 id="episode-3-title" class="mt-2 text-lg font-bold text-slate-900">
                                            <a href="/3">3: The Wet Bandits</a>
                                        </h2>
                                        <time datetime="2022-02-10T00:00:00.000Z"
                                            class="order-first font-mono text-sm leading-7 text-slate-500">February
                                            10, 2022
                                        </time>
                                        <p class="mt-1 text-base leading-7 text-slate-700">The Christmas of 1989 wasn’t
                                            the first time Harry and Marv crossed paths with the McCallisters. The real
                                            story starts in 1973, when Peter tripped Marv in the highschool locker
                                            room.</p>
                                        <div class="mt-4 flex items-center gap-4">
                                            <button type="button" aria-label="Play episode 3: The Wet Bandits"
                                                class="flex items-center gap-x-3 text-sm font-bold leading-6 text-pink-500 hover:text-pink-700 active:text-pink-900">
                                                <svg aria-hidden="true" viewBox="0 0 10 10"
                                                    class="h-2.5 w-2.5 fill-current">
                                                    <path
                                                        d="M8.25 4.567a.5.5 0 0 1 0 .866l-7.5 4.33A.5.5 0 0 1 0 9.33V.67A.5.5 0 0 1 .75.237l7.5 4.33Z">
                                                    </path>
                                                </svg>
                                                <span aria-hidden="true">Listen</span></button>
                                            <span aria-hidden="true" class="text-sm font-bold text-slate-400">/</span><a
                                                class="flex items-center text-sm font-bold leading-6 text-pink-500 hover:text-pink-700 active:text-pink-900"
                                                aria-label="Show notes for episode 3: The Wet Bandits" href="/3">Show
                                                notes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article aria-labelledby="episode-2-title" class="py-10 sm:py-12">
                        <div class="lg:px-8">
                            <div class="lg:max-w-4xl">
                                <div class="mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:px-0">
                                    <div class="flex flex-col items-start">
                                        <h2 id="episode-2-title" class="mt-2 text-lg font-bold text-slate-900">
                                            <a href="/2">2: Hank Scorpio</a>
                                        </h2>
                                        <time datetime="2022-02-03T00:00:00.000Z"
                                            class="order-first font-mono text-sm leading-7 text-slate-500">February 3,
                                            2022
                                        </time>
                                        <p class="mt-1 text-base leading-7 text-slate-700">What looks to outsiders like
                                            a malicious plan to conquer the east coast, was actually a story of
                                            liberation and freedom if you get it straight from the source.</p>
                                        <div class="mt-4 flex items-center gap-4">
                                            <button type="button" aria-label="Play episode 2: Hank Scorpio"
                                                class="flex items-center gap-x-3 text-sm font-bold leading-6 text-pink-500 hover:text-pink-700 active:text-pink-900">
                                                <svg aria-hidden="true" viewBox="0 0 10 10"
                                                    class="h-2.5 w-2.5 fill-current">
                                                    <path
                                                        d="M8.25 4.567a.5.5 0 0 1 0 .866l-7.5 4.33A.5.5 0 0 1 0 9.33V.67A.5.5 0 0 1 .75.237l7.5 4.33Z">
                                                    </path>
                                                </svg>
                                                <span aria-hidden="true">Listen</span></button>
                                            <span aria-hidden="true" class="text-sm font-bold text-slate-400">/</span><a
                                                class="flex items-center text-sm font-bold leading-6 text-pink-500 hover:text-pink-700 active:text-pink-900"
                                                aria-label="Show notes for episode 2: Hank Scorpio" href="/2">Show
                                                notes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article aria-labelledby="episode-1-title" class="py-10 sm:py-12">
                        <div class="lg:px-8">
                            <div class="lg:max-w-4xl">
                                <div class="mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:px-0">
                                    <div class="flex flex-col items-start">
                                        <h2 id="episode-1-title" class="mt-2 text-lg font-bold text-slate-900">
                                            <a href="/1">1: Skeletor</a>
                                        </h2>
                                        <time datetime="2022-01-27T00:00:00.000Z"
                                            class="order-first font-mono text-sm leading-7 text-slate-500">January 27,
                                            2022
                                        </time>
                                        <p class="mt-1 text-base leading-7 text-slate-700">You know him as an evil
                                            supervillain, but his closest friends call him Jeff, and he's just doing his
                                            best to find his way in a world that doesn't know what to do with a talking
                                            skeleton.</p>
                                        <div class="mt-4 flex items-center gap-4">
                                            <button type="button" aria-label="Play episode 1: Skeletor"
                                                class="flex items-center gap-x-3 text-sm font-bold leading-6 text-pink-500 hover:text-pink-700 active:text-pink-900">
                                                <svg aria-hidden="true" viewBox="0 0 10 10"
                                                    class="h-2.5 w-2.5 fill-current">
                                                    <path
                                                        d="M8.25 4.567a.5.5 0 0 1 0 .866l-7.5 4.33A.5.5 0 0 1 0 9.33V.67A.5.5 0 0 1 .75.237l7.5 4.33Z">
                                                    </path>
                                                </svg>
                                                <span aria-hidden="true">Listen</span></button>
                                            <span aria-hidden="true" class="text-sm font-bold text-slate-400">/</span><a
                                                class="flex items-center text-sm font-bold leading-6 text-pink-500 hover:text-pink-700 active:text-pink-900"
                                                aria-label="Show notes for episode 1: Skeletor" href="/1">Show
                                                notes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection
