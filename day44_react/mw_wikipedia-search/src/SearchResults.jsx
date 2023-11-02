export default function SearchResults({ searchResults }) {
	return searchResults
		? searchResults.query.search.map((result) => (
				<>
					<p key={result.pageid}>{result.title}</p>
					<a
						href={"https://en.wikipedia.org/wiki/" + result.title}
						target="_blank"
						rel="noopener noreferrer"
					>
						{result.title}
					</a>
				</>
		  ))
		: "";
}
