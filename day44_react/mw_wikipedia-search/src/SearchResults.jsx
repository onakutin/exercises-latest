import { Fragment } from "react";

export default function SearchResults({ searchResults }) {
	return searchResults?.query?.search?.map((result) => (
		<Fragment key={result.pageid}>
			<br />
			<a
				href={"https://en.wikipedia.org/wiki/" + result.title}
				target="_blank"
				rel="noopener noreferrer"
			>
				{result.title}
			</a>
			<br />
		</Fragment>
	));
}
