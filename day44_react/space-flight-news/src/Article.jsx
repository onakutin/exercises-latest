import { useEffect, useState } from "react";
import { Link, useParams } from "react-router-dom";
import "./style/Article.css";

export default function Article() {
	const { id } = useParams();
	const [article, setArticle] = useState(null);

	const loadArticle = async () => {
		if (!id) return <p>Book not found</p>;
		const response = await fetch(
			"https://api.spaceflightnewsapi.net/v3/articles/" + id
		);
		const data = await response.json();
		console.log(data);
		setArticle(data);
	};

	useEffect(() => {
		loadArticle();
	}, []);

	return (
		<>
			<Link to={"/"}>Back to the list</Link>
			{article ? (
				<div
					className="article"
					style={{ backgroundImage: `url(${article.imageUrl})` }}
				>
					<div className="article__text">
						<h3>{article.title}</h3>
						<p>Web: {article.newsSite}</p>
						<p>{article.summary}</p>
					</div>
					<a className="article__link" href={article.url} target="blank">
						Read
					</a>
				</div>
			) : (
				<p>Loading...</p>
			)}
		</>
	);
}
