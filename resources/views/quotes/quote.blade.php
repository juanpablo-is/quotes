<div class="quote">
    <div id="quote-info">
        <h2 id="quoteText">
            {{ $quote->quoteText }}
        </h2>
    </div>
    <div id="quote-author">
        <a href="{{ route('quote.author', $quote->quoteAuthor) }}">
            <h3 id="quoteAuthor">{{ $quote->quoteAuthor }}</h3>
        </a>
        <a href="{{ isset($quote->quoteGenre) ? route('quote.genre',  $quote->quoteGenre) : '#' }}">
            <p id="quoteGenre">{{ $quote->quoteGenre ?? 'Not genre' }}</p>
        </a>
    </div>
</div>