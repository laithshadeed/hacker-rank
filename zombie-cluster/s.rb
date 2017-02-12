#!/usr/bin/env ruby

def search_dfs_recursive(z, visited, i)
  for j in 0..z.length-1
    unless visited[j]
      visited[i] = true
      search_dfs_recursive(z, visited, j) if z[i][j] == 1
    end
  end
end

def search_dfs_iterative(z, visited, i)
  stack = [i]
  while !stack.empty?
    j = stack.pop
    unless visited[j]
      visited[j] = true
      for k in 0..z.length-1
        stack.push(k) if z[j][k] == 1
      end
    end
  end
end

def search_bfs(z, visited, i)
  queue = [i]
  while !queue.empty?
    j = queue.shift
    unless visited[j]
      visited[j] = true
      for k in 0..z.length-1
        queue.push(k) if z[j][k] == 1
      end
    end
  end
end

def clusters_count(z)
  count = 0
  visited = []
  for i in 0..z.length-1
    unless visited[i]
      search_dfs_recursive(z, visited, i)
      #search_dfs_iterative(z, visited, i)
      #search_bfs(z, visited, i)
      count +=1
    end
  end
  count
end

zombies = []
gets # Ignore the first line
while line = gets do
  zombies << line.strip.split('').map{ |x| x.to_i }
end

open ENV['OUTPUT_PATH'], 'w' do |f|
  f << "#{clusters_count(zombies)}\n"
end
