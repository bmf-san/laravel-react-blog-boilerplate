import React from 'react';
import { Link } from 'react-router';

export default class Navbar extends React.Component {
  render() {
    return (
      <div>
        <ul>
          <li><Link to="/">Home</Link></li>
          <li><Link to="/new-post">NewPost</Link></li>
          <li><Link to="/posts">Posts</Link></li>
          <li><Link to="/post/edit/:post-id">EditPost</Link></li>
          <li><Link to="/categories">Categories</Link></li>
          <li><Link to="/config">Config</Link></li>
        </ul>
      </div>
    )
  }
}