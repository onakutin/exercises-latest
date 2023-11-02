import { useContext, useEffect, useState } from "react";
import ArticleList from "./ArticleList";
import PageContext from "./PageContext";

export default function Homepage() {
	const [news, setNews] = useState(null);
	const { page } = useContext(PageContext);

	const loadNews = async () => {
		const response = await fetch(
			"https://api.spaceflightnewsapi.net/v3/articles?_limit=10&_start=" + page
		);
		const data = await response.json();
		console.log(data[0]);
		setNews(data);
	};

	useEffect(() => {
		loadNews();
	}, [page]);

	return (
		<>
			<ArticleList news={news} />
		</>
	);
}
