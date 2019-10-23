<a title="Click to mark as favorite {{ $name }} (Click again to undo" class="favorite mt-2 {{ Auth::guest() ? 'off' : ($model->is_favorited ? 'favorited': '') }}"
                            onclick="event.preventDefault(); document.getElementById('favorite-{{ $name }}-{{ $model->id }}').submit();">
                            <i class="fas fa-star fa-2x"></i>
                            <span class="favorites-count">{{ $model->favorite_count }}</span>
                        </a>
                    <form id="favorite-{{ $name }}-{{ $model->id }}" action="/{{ $firstURISegment }}/{{$model->id}}/favorites" method="POST" style="display: none;">
                                @csrf
                                @if ($model->is_favorited)
                                @method('DELETE')
                                @endif
                            </form>