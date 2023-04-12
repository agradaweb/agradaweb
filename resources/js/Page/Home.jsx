import React from 'react';

function Home(props) {
  const {  posts } = props;

  if (!posts || posts.length === 0) {
    return <div>No hay publicaciones disponibles</div>;
  }

  return (
    <div>
      <h1>sss</h1>
      <ul>
        {posts.map(post => (
          <li key={post.id}>{post.title}</li>
        ))}
        hola
      </ul>
    </div>
  );
}

export default Home;
