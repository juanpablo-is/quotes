<div id="quote-info">
    <h2 id="quoteText">
        {{ $quote->quote->quoteText }}
    </h2>
</div>
<div id="quote-author">
    <a href="{{ route('quote.author', $quote->quote->quoteAuthor) }}">
        <h3 id="quoteAuthor">{{ $quote->quote->quoteAuthor }}</h3>
    </a>
    <a href="{{ isset($quote->quote->quoteGenre) ? route('quote.genre',  $quote->quote->quoteGenre) : '#' }}">
        <p id="quoteGenre">{{ $quote->quote->quoteGenre ?? 'Not genre' }}</p>
    </a>
</div>